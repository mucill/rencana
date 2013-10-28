<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testIndexTahun()
	{
		$response = $this->action('GET', 'TahunController@index');
	}

}