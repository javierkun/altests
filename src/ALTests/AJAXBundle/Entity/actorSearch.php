<?php
// src/ALTests/AJAXBundle/Entity/actorSearch.php
namespace ALTests\AJAXBundle\Entity;

class actorSearch
{
    protected $name;
	
	protected $API = 'eebde095234f0dbdac3f89d2d016871a';
	
	protected $actors = null;
	
	protected $selected_actor = null;
	
	private function queryTMDB($url) {
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		
		$response = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($response, true);
	}
	
	// getFirstActor will set the cursor on the first actor, given a search has occurred and at least 1 result exist.
    public function getFirstActor()
    {
		if($this->actors){
			$this->selected_actor = $this->actors['results'][0];
			return true;
		}
		return false;
    }
	
	// search for a term, paginating if needed.
	public function searchActor($name, $page = 1)
	{
		$this->name = $name;
		
		$url = "http://api.themoviedb.org/3/search/person?api_key=eebde095234f0dbdac3f89d2d016871a&query=".urlencode($this->name)."&page=".(string)$page;		
		$this->actors = $this->queryTMDB($url); 
		
		return $this->actors;		
	}
	
	// Get movies for a given actor or for the selected_actor set in the class.
	public function searchMoviesActor($id=null, $name='')
	{
		// if no id given and no selected actor given, return false
		if(empty($id) and empty($this->selected_actor))
			return false;
						
		$url = "http://api.themoviedb.org/3/person/".urlencode(empty($id)?$this->selected_actor['id']:$id)."/movie_credits?api_key=".$this->API;
		
		$full_list = $this->queryTMDB($url);
		
		$release_date = array();
		
		foreach ($full_list['cast'] as $key => $row) {
			$release_date[$key] = $row['release_date'];
		}
		
		// Sort the data with release_date ascending
		if(!empty($full_list['cast']))
			array_multisort($release_date, SORT_ASC, $full_list['cast']);
		
		if(empty($this->selected_actor))
			$this->selected_actor = array('id'=> $id, 'name' => $name);
		
		return array('movies' => $full_list['cast'], 'actor' => $this->selected_actor);	
	}
}