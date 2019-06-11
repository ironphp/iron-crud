<?php
/**
 * @package       IronPHP Application
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
        $pagination = $this->getPaginationHtml('?');//, null, ['ul' => 'pagination', 'li' => ['page-item', 'page-item', 'page-item active'], 'a' => 'page-link']
        return [
            'server_root' => SERVER_ROOT,
            'products' => $products,
            'pagination'=>$pagination
        ];
    }

    /**
     * Get data from table.
     *
     * @param  int   $id
     * @return void
     */
    public function get($id)
    {
        $products = $this->table('products')->where(['id'=>$id])->get();
        return [
            'server_root' => SERVER_ROOT,
            'products' => [$products]
        ];
    }

    /**
     * Add data to table.
     *
     * @param  array  $request
     * @return bool
     */
    public function add($request)
    {
        return $this->table('products')->add(['name'=>$request['name'], 'price'=>$request['price'], 'detail'=>$request['detail']]);
    }

    /**
     * Update data from table.
     *
     * @param  array  $request
     * @param  int   $id
     * @return void
     */
    public function update($request, $id)
    {
        return $this->table('products')->where(['id'=>$id])->update(['name'=>$request['name'], 'price'=>$request['price'], 'detail'=>$request['detail']]);
    }

    /**
     * Delete data from table.
     *
     * @param  int   $id
     * @return void
     */
    public function delete($id)
    {
        return $this->table('products')->where(['id'=>$id])->delete();
    }
}