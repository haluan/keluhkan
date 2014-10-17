<?php
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
class Post extends \Eloquent implements StaplerableInterface{
	use EloquentTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title','body','picture','nama_perusahaan'];

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function __construct(array $attributes = array()) {
       if(!Auth::guest()){
             $this->user_id = Auth::user()->id;
       }
        $this->hasAttachedFile('picture', [
            'styles' => [
            'medium' => '300x300',
            'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

}