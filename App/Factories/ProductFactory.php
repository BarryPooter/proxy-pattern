<?php
namespace App\Factories;

use App\Classes\User;
use App\Contracts\FactoryInterface;
use App\Proxies\ProductProxy;

class ProductFactory implements FactoryInterface
{
    /**
     * @return ProductProxy
     */
    public function build()
    {
        $currentUser = new User();
        $currentUser->setAdmin(false);

        return new ProductProxy($currentUser->isAdmin());
    }
}