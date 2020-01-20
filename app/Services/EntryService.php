<?php

namespace App\Services;

use App\Repositories\EntryRepositoryInterface;

class EntryService
{

	/** @var EntryRepositoryInterface */
	protected $entry;

	/**
	 * @param EntryRepositoryInterface $entry
	 */
	public function __construct(EntryRepositoryInterface $entry)
	{
		$this->entry = $entry;
	}

  /**
   * @param int $page
   * @param int $limit
   *
   * @return LengthAwarePaginator
   */
  public function getPage($page = 1, $limit = 20)
  {
  	$result = $this->entry->byPage($page, $limit);
  	return new LenghtAwarePaginator(
  		$result->items, $result->total, $result->perPage, $result->currentPage
  	);
  }


	/**
	 * @param array $attributes
	 * @return mixed
	 */
	public function addEntry(array $attibutes)
	{
		return $this->entry->save($attributes);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getEntry($id)
	{
		return $this->entry->find($id);
	}

}