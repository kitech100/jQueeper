<?php
class Update_controller extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('pages/whats-new');
        $this->load->view('templates/footer');
    }


    public function show($id)
    {
        // code to retrieve a single record by ID from the model and pass it to a view goes here
    }

    public function create()
    {
        // code to display a form for creating a new record goes here
    }

    public function store()
    {
        // code to process the form submission and create a new record in the model goes here
    }

    public function edit($id)
    {
        // code to retrieve a single record by ID from the model, display a form for editing it, and pass the record data to the form goes here
    }

    public function update($id)
    {
        // code to process the form submission and update an existing record in the model goes here
    }

    public function delete($id)
    {
        // code to delete a record by ID from the model goes here
    }
}
