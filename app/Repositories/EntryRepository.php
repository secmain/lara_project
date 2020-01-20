<?php

namespace App\Repositories;

use App\DataAccess\Eloquent\Entry;
use App\DataAccess\Cache\Cacheable;

class EntryRepository implements EntryRepositoryInterface
{

	/** @var Cacheable */
	protected $cache;

	/** @var Entry */
	protected $eloquent;

	/**
	 * @param Cacheable $cache
	 * @param Entry $eloquent
	 */
	public function __construct(Cacheable $cache, Entry $eloquent)
	{
		$this->cache = $cache;
		$this->eloquent = $eloquent;
	}

	/**
	 * @param array $param
	 * @return mixed
	 */
	public function save(array $params)
	{
		$attributes = [];
		$attributes['id'] = (isset($params['id'])) ? $params['id'] : null;
		$result = $this->eloquent->updateOrCreate($attributes, $params);
		
		if ($result) {
			$this->cache->flush();
		}

		return $result;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id)
	{
		/* 一旦cacheを使わない		
		$cacheKey = "entry:{$id}";
		
		if ($this->cache->has($cacheKey)) {
			return $this->cache->get($cacheKey);
		}
		*/

		$result = $this->eloquent->find($id);
		/*
		if ($result) {
			$this->cache->put($cacheKey, $result);
		}
		*/

		return $result;
	}

	/**
   * @return int
   */
  public function count()
  {
      $key = 'entry_count';
      if ($this->cache->has($key)) {
          return $this->cache->get($key);
      }
      $result = $this->eloquent->count();
      $this->cache->put($key, $result);
      return $result;
  }

  /**
   * @param int $page
   * @param int $limit
   * @return mixed|\StdClass
   */
  public function byPage($page = 1, $limit = 20)
  {
  	$key = "entry_page:{$page}:{$limit}";
  	if ($this->cache->has($key)) {
        return $this->cache->get($key);
    }
    return $this->cache->putPaginateCache(
        $page,
        $limit,
        $this->count(),
        $this->eloquent->byPage($limit, $page),
        $key
    );
  }

}