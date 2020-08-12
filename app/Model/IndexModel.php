<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Model;

use Friday\Model\ModelService;

class IndexModel extends ModelService
{
    /**
     * Get All data from table.
     *
     * @return void
     */
    public function getAll()
    {
        $products = $this->table('products')->getPaginated(5);
        $pagination = $this->getPaginationHtml('?'); //, null, ['ul' => 'pagination', 'li' => ['page-item', 'page-item', 'page-item active'], 'a' => 'page-link']

        return [
            'server_root' => SERVER_ROOT,
            'products'    => $products,
            'pagination'  => $pagination,
        ];
    }

    /**
     * Variable.
     *
     * @var array
     */
    public $data = ['name' => 'GK'];

    /**
     * Get data from table.
     *
     * @param mix      $field
     * @param int|null $id
     *
     * @return void
     */
    public function get($field = null, $id = null)
    {
        if ($id == null || (is_array($id) && count($id) == 0)) {
            return $this->table('user')->get($field);
        } else {
            return $this->table('user')->where($id)->get($field);
        }
        /*
            public function get($id)
                $products = $this->table('products')->where(['id'=>$id])->get();

                return [
                    'server_root' => SERVER_ROOT,
                    'products'    => [$products],
                ];
        */
    }

    /**
     * Add data to table.
     *
     * @return void
     */
    public function add()
    {
        return $this->table('user')->add(['id'=>3, 'name'=>'pihu', 'user'=>'pihu', 'password'=>'123', 'status'=>1]);
        /*
            public function add($request)
                return $this->table('products')->add(['name'=>$request['name'], 'price'=>$request['price'], 'detail'=>$request['detail']]);
        */
    }

    /**
     * Update data from table.
     *
     * @return void
     */
    public function update()
    {
        return $this->table('user')->where(['id'=>1])->update(['status'=>1, 'name'=>'illu']);
        /*
            public function update($request, $id)
                return $this->table('products')->where(['id'=>$id])->update(['name'=>$request['name'], 'price'=>$request['price'], 'detail'=>$request['detail']]);
        */
    }

    /**
     * Delete data from table.
     *
     * @return void
     */
    public function delete()
    {
        return $this->table('user')->where(['id'=>1])->delete();
        /*
            public function delete($id)
                return $this->table('products')->where(['id'=>$id])->delete();
        */
    }
}
