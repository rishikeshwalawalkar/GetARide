<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * The User model.
 *
 * @author PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Users\Models
 */
class User_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->profile_table = $this->db->dbprefix('profiles');
	}

	// --------------------------------------------------------------------------

	/**
	 * Get a specified (single) user
	 *
	 * @param array $params
	 *
	 * @return object
	 */
	public function get($params)
	{
		if (isset($params['id']))
		{
			$this->db->where('users.id', $params['id']);
		}

		if (isset($params['email']))
		{
			$this->db->where('LOWER('.$this->db->dbprefix('users.email').')', strtolower($params['email']));
		}

		if (isset($params['role']))
		{
			$this->db->where('users.group_id', $params['role']);
		}

		$this->db
			->select($this->profile_table.'.*, users.*')
			->limit(1)
			->join('profiles', 'profiles.user_id = users.id', 'left');

		return $this->db->get('users')->row();
	}

	// --------------------------------------------------------------------------

	/**
	 * Get recent users
	 *
	 * @param     int  $limit defaults to 10
	 *
	 * @return     object
	 */
	public function get_recent($limit = 10)
	{
		$this->db->order_by('users.created_on', 'desc');
		$this->db->limit($limit);
		return $this->get_all();
	}

	// --------------------------------------------------------------------------

	/**
	 * Get all user objects
	 *
	 * @return object
	 */
	public function get_all()
	{
		$this->db
			->select($this->profile_table.'.*, g.description as group_name, users.*')
			->join('groups g', 'g.id = users.group_id')
			->join('profiles', 'profiles.user_id = users.id', 'left')
			->group_by('users.id');

		return parent::get_all();
	}

	// --------------------------------------------------------------------------

	/**
	 * Create a new user
	 *
	 * @param array $input
	 *
	 * @return int|true
	 */
	public function add($input = array())
	{
		$this->load->helper('date');

		return parent::insert(array(
			'email' => $input->email,
			'password' => $input->password,
			'salt' => $input->salt,
			'role' => empty($input->role) ? 'user' : $input->role,
			'active' => 0,
			'lang' => $this->config->item('default_language'),
			'activation_code' => $input->activation_code,
			'created_on' => now(),
			'last_login' => now(),
			'ip' => $this->input->ip_address()
		));
	}

	// --------------------------------------------------------------------------

	/**
	 * Update the last login time
	 *
	 * @param int $id
	 */
	public function update_last_login($id)
	{
		$this->db->update('users', array('last_login' => now()), array('id' => $id));
	}

	// --------------------------------------------------------------------------

	/**
	 * Activate a newly created user
	 *
	 * @param int $id
	 *
	 * @return bool
	 */
	public function activate($id)
	{
		return parent::update($id, array('active' => 1, 'activation_code' => ''));
	}

	// --------------------------------------------------------------------------

	/**
	 * Count by
	 *
	 * @param array $params
	 *
	 * @return int
	 */
	public function count_by($params = array())
	{
		$this->db->from($this->_table)
			->join('profiles', 'users.id = profiles.user_id', 'left');

		if ( ! empty($params['active']))
		{
			$params['active'] = $params['active'] === 2 ? 0 : $params['active'];
			$this->db->where('users.active', $params['active']);
		}

		if ( ! empty($params['group_id']))
		{
			$this->db->where('group_id', $params['group_id']);
		}

		if ( ! empty($params['name']))
		{
			$this->db
				->like('users.username', trim($params['name']))
				->or_like('users.email', trim($params['name']))
				->or_like('profiles.first_name', trim($params['name']))
				->or_like('profiles.last_name', trim($params['name']));
		}

		return $this->db->count_all_results();
	}

	// --------------------------------------------------------------------------

	/**
	 * Get by many
	 *
	 * @param array $params
	 *
	 * @return object
	 */
	public function get_many_by($params = array())
	{
		if ( ! empty($params['active']))
		{
			$params['active'] = $params['active'] === 2 ? 0 : $params['active'];
			$this->db->where('active', $params['active']);
		}

		if ( ! empty($params['group_id']))
		{
			$this->db->where('group_id', $params['group_id']);
		}

		if ( ! empty($params['name']))
		{
			$this->db
				->or_like('users.username', trim($params['name']))
				->or_like('users.email', trim($params['name']));
		}

		return $this->get_all();
	}

	public function add_vehicle($model_name,$number_plate,$vehicle_color,$vehicle_image) {

		$data = array(
		   'driver_id' => 1,
		   'vehicle_model' => $model_name,
		   'vehicle_no_plate' => $number_plate,
		   'vehicle_color' => $vehicle_color,
		   'vehicle_image' => $vehicle_image,
		   'current_location' => '126128736868713261'
		);
		$this->db->insert('vehicle',$data);
	}

	public function user_add_ride($start,$end) {
		
		/*$query = $this->db->query("SELECT vehicle_id,
			      69.0 * DEGREES(ACOS(COS(RADIANS(latpoint))
					 * COS(RADIANS(lat))
					 * COS(RADIANS(longpoint) - RADIANS(lng))
					 + SIN(RADIANS(latpoint))
					 * SIN(RADIANS(lat)))) AS distance_in_miles
			 FROM default_vehicle
			 JOIN (
			     SELECT "+ $lat +" AS latpoint, "+ $lng +" AS longpoint
			   ) AS p ON 1=1
			 ORDER BY distance_in_miles
			 LIMIT 1");*/
		$this->load->helper('date');
		$data = array(
			'ride_id' => NULL,
			'ride_date' => date('y-m-d'),
			'user_id' => $this->current_user->id,
			'start_location' => $start,
			'destination_location' => $end,
			'distance' => 12.6
		);
		$this->db->insert('ride',$data);

		$data = array('flag'=>1);
		$this->db->where('vehicle_id',3);
		$this->db->update('default_vehicle',$data);

	}

	public function get_flag() {
		$query = $this->db->query('select vehicle_id from default_vehicle where flag=1');
		foreach ($query->result() as $row)
		{
		    $result = $row->vehicle_id;
		}
		return $result;
	}

	public function start_ride($vehicle_id) {

		$query = $this->db->query('SELECT ride_id FROM default_ride ORDER BY ride_id DESC LIMIT 1');
		foreach ($query->result() as $row)
		{
		    $result = $row->ride_id;
		}
		$this->load->helper('date');
		$this->db->where('ride_id',$result);
		$data = array(
			'start_time' => date('y-m-d'),
			'vehicle_id' => 3
		);
		$this->db->update('default_ride',$data);
	}

	public function end_ride() {

		$query = $this->db->query('SELECT ride_id FROM default_ride ORDER BY ride_id DESC LIMIT 1');
		foreach ($query->result() as $row)
		{
		    $result = $row->ride_id;
		}
		$this->load->helper('date');
		$this->db->where('ride_id',$result);
		$data = array(
			'end_time' => date('y-m-d'),
		);
		$this->db->update('default_ride',$data);
	}

	public function save_rating($rating) {
		$query = $this->db->query('SELECT ride_id FROM default_ride ORDER BY ride_id DESC LIMIT 1');
		foreach ($query->result() as $row)
		{
		    $result = $row->ride_id;
		}
		$data = array(
			'rating_id' => NULL,
			'ride_id' => $result,
			'customer_rating' => $rating,
		);
		$this->db->insert('ratings',$data);
	}

	public function save_feedback($feedback) {
		$query = $this->db->query('SELECT ride_id FROM default_ride ORDER BY ride_id DESC LIMIT 1');
		foreach ($query->result() as $row)
		{
		    $result = $row->ride_id;
		}
		$data = array(
			'feedback_id' => NULL,
			'ride_id' => $result,
			'user_feedback' => $feedback,
		);
		$this->db->insert('feedback',$data);
	}

	public function bookings() {
		$result = $this->db->query("select r.ride_date, r.start_location, r.destination_location, b.bill_amt from default_ride r inner join 
							billing b on r.ride_id=b.ride_id where user_id=1");

		return json_encode($result->result());
	}

	public function earnings() {
		$result = $this->db->query("select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3");

		return json_encode($result->result());
	}
}
