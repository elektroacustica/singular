<?php

namespace Singular\Managers;

abstract class BaseManager
{
	protected $entity;
	protected $data;
	protected $error;

	public function __construct($entity, $data)
	{
		$this->entity = $entity;
		$this->data = array_only($data, array_keys($this->getRules()));
	}

	abstract public function getRules();

	public function isValid()
	{
		$rules = $this->getRules();

		$validation = \Validator::make($this->data, $rules);

		$isValid = $validation->passes();

		$this->error = $validation->messages();

		return $isValid;
	}

	public function getError()
	{
		return $this->error;
	}

	public function save()
	{
		if (!$this->isValid()) {
			return false;
		}

		$this->entity->fill($this->data);
		$this->entity->save();

		return true;
	}

}