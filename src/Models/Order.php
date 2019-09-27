<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Facades\WooCommerce;
use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

class Order extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'orders';

    /*
     * Note
     */

    public function notes($order_id, $options = [])
    {
        return WooCommerce::all("orders/{$order_id}/notes", $options);
    }

    public function note($order_id, $note_id)
    {
        return WooCommerce::create("orders/{$order_id}/notes/{$note_id}");
    }

    public function createNote($order_id)
    {
        return WooCommerce::create("orders/{$order_id}/notes");
    }

    public function deleteNote($order_id, $note_id, $options = [])
    {
        return WooCommerce::delete("orders/{$order_id}/notes/{$note_id}", $options);
    }

    /*
     * Refund
     */

    public function refunds($order_id, $options = [])
    {
        return WooCommerce::all("orders/{$order_id}/refunds", $options);
    }

    public function refund($order_id, $refund_id)
    {
        return WooCommerce::create("orders/{$order_id}/refunds/{$refund_id}");
    }

    public function createRefund($order_id)
    {
        return WooCommerce::create("orders/{$order_id}/refunds");
    }

    public function deleteRefund($order_id, $refund_id, $options = [])
    {
        return WooCommerce::delete("orders/{$order_id}/refunds/{$refund_id}", $options);
    }
}
