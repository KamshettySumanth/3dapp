<?php
class Controller {

	public $load;
	public $model;
	
	function __construct($pageURI = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageURI();
	}
	function apiDeleteTable()
	{
		$data = $this->model->dbDeleteTable();
		$this->load->view('viewMessage', $data);
	}

	
	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		try {
            $data = $this->model->dbGetData(); // This method should now use PDO

            if ($data === null || empty($data)) {
                throw new Exception('No data found');
            }

            $response = [
                'status_code_header' => 'HTTP/1.1 200 OK',
                'body' => json_encode($data)
            ];
        } catch (Exception $e) {
            $response = [
                'status_code_header' => 'HTTP/1.1 500 Internal Server Error',
                'body' => json_encode(['error' => 'An error occurred: ' . $e->getMessage()])
            ];
        }

        header($response['status_code_header']);
        header('Content-Type: application/json');
        echo $response['body'];
	}  	
	
	function apicocacola()
	{
		$this->load->view('cocacola');	
	} 
	function index()
	{
		$this->load->view('index');	
	}  	
	
}
?>    