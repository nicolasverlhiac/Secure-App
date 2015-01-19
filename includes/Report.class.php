<?php

class Report{

	// Private ORM instance
	private $orm;

	/**
	 * Création d'un film dans la base de donées
	 * @param string $titre Le titre du film
	 * @return User
	 */

	public static function createReport($dateBegin, $dateEnd, $latitude, $longitude, $status, $userIp, $userId)
	{
		// On hash le mot de passe pour le rendre illisible
		$motDePasse = hashPassword($motDePasse);
		
		// Inscrit un nouveau film dans la base de données
		$result = ORM::for_table('sa_reports')->create();
		$result->report_begin = $dateBegin;
		$result->report_end = $dateEnd;
		$result->report_latitude = $latitude;
		$result->report_longitude = $longitude;
		$result->report_status = $status;
		$result->report_IP = $userIp;
		$result->user_id = $userId;
		$result->save();
	}

	/**
	 * Magic method for accessing the elements of the private
	 * $orm instance as properties of the user object
	 * @param string $key The accessed property's name 
	 * @return mixed
	 */

	public function __get($key){
		if(isset($this->orm->$key)){
			return $this->orm->$key;
		}

		return null;
	}

}