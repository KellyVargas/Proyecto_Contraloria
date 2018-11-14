<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Custom variable


    /**
     *Fields that go inside the form
     *
     * @var array
     */
    protected $fieldsForm = [
        [
            'name' => 'name',
            'type' => 'text',
        ],
        [
            'name' => 'email',
            'type' => 'text',
        ],
    ];


    /**
     * Fields that go inside the table
     *
     * @var array
     */
    public $ColumnsTable = [
        'name', 'email'
    ];

    /**
     * Get the Fields that go inside the form
     *
     * @return array
     */
    public function getColumnsTable(): array
    {
        return $this->ColumnsTable;
    }

    /**
     * Get the Fields that go inside the table
     *
     * @return array
     */

    public function getFieldsForm(): array
    {
        return $this->fieldsForm;
    }

    /**
     * @return array
     */

}
