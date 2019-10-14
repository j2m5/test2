<?php


namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Message;

class MessageRepository extends BaseRepository
{

    protected function getModelClass()
    {
        return Message::class;
    }

    public function getMessages($from, $to)
    {
        $columns = [
            'id',
            'from',
            'to',
            'content',
            'created_at'
        ];

        $result = $this->buildQuery()
            ->select($columns)
            ->where('from', $from)
            ->where('to', $to)
            ->orWhere('to', $from)
            ->where('from', $to)
            ->with('user:id,name')
            ->get();
        return $result;
    }

}
