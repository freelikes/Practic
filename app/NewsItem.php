<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class NewsItem extends Model
{
    use HasRoles;

    protected $guard_name = ['id'];


    // $role = Role::create(['name' => 'writer']);
    // $permission = Permission::create(['name' => 'edit articles']);

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->summary)
            ->updated($this->updated_at)
            ->link($this->link)
            ->author($this->author);
    }
    public static function getFeedItems()
    {
        return NewsItem::all();
    }
}
