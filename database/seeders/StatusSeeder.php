<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
           'name' => [
               'en' => 'New',
               'uz' => 'Yangi'
           ],
            'code' => 'new',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Confirmed',
                'uz' => 'Tasdiqlandi'
            ],
            'code' => 'confirmed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'In processing',
                'uz' => 'Jarayonda'
            ],
            'code' => 'In processing',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Shipping',
                'uz' => 'Yetkazib berilyapti'
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Delivered',
                'uz' => 'Yetkazib berildi'
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Paid',
                'uz' => 'To\'landi'
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Waiting for payment',
                'uz' => 'To\'lov kutilmoqda'
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Completed',
                'uz' => 'Yakunlandi'
            ],
            'code' => 'Completed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Closed',
                'uz' => 'Yopildi'
            ],
            'code' => 'Closed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Refunded',
                'uz' => 'To\'lov qaytarildi'
            ],
            'code' => 'refunded',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Cancelled',
                'uz' => 'Bekor qilindi'
            ],
            'code' => 'cancelled',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'en' => 'Payment error',
                'uz' => 'To\'lovda xatolik'
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
