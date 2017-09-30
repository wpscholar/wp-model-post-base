<?php

namespace wpscholar\WordPress;

/**
 * Class PostModelBase
 *
 * @package wpscholar\WordPress
 */
abstract class PostModelBase {

	const POST_TYPE = null;

	/**
	 * @var \WP_Post
	 */
	public $post;

	/**
	 * Post model constructor.
	 *
	 * @param \WP_Post $post
	 */
	public function __construct( \WP_Post $post ) {
		if ( $post->post_type !== static::POST_TYPE ) {
			throw new \InvalidArgumentException( 'Invalid post type!' );
		}
		$this->post = $post;
	}

	/**
	 * Create a new instance
	 *
	 * @param \WP_Post $post
	 *
	 * @return static
	 */
	public static function create( \WP_Post $post ) {
		return new static( $post );
	}

}