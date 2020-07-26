<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Controller;

use Friday\Controller\Controller;
use Friday\Foundation\Application;

class IndexController extends Controller
{
    /**
     * Create new Controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Index method.
     *
     * @return void
     */
    public function index()
    {
        $data = $this->model('IndexModel')->getAll();

        $this->template('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $this->template('create', ['server_root' => SERVER_ROOT]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store()
    {
        if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['detail'])) {
            $save = $this->model('IndexModel')->add($_POST);
        }
        header('Location: '.SERVER_ROOT);
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @return void
     */
    public function show()
    {
        $product = $this->model('IndexModel')->get($this->getParam()['id']);

        $this->template('show', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return void
     */
    public function edit()
    {
        $product = $this->model('IndexModel')->get($this->getParam()['id']);

        $this->template('edit', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return void
     */
    public function update()
    {
        if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['detail'])) {
            $update = $this->model('IndexModel')->update($_POST, $this->getParam()['id']);
        }
        header('Location: '.SERVER_ROOT);
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return void
     */
    public function destroy()
    {
        $delete = $this->model('IndexModel')->delete($this->getParam()['id']);

        header('Location: '.SERVER_ROOT);
        exit;
    }
}
