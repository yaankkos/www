<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostController;

class Post2 extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'posts2';

    /**
     * Первичный ключ таблицы.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Определяет необходимость отметок времени для модели.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Поля, разрешённые для массового заполнения.
     * Обратите внимание: поле называется 'descc' (как в вашей таблице)
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'descc',    
        'text',
        'date'
    ];

    /**
     * Формат хранения даты.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d';

    /**
     * Приведение типов для атрибутов.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'id' => 'integer'
    ];
}
