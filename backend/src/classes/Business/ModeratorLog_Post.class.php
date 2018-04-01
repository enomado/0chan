<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class ModeratorLog_Post extends AutoModeratorLog_Post implements Prototyped, DAOConnected
	{
	    protected $post = null;
	    protected $postFetched = false;

		/**
		 * @return ModeratorLog_Post
		**/
		public static function create()
		{
			return new self;
		}
		
		/**
		 * @return ModeratorLog_PostDAO
		**/
		public static function dao()
		{
			return Singleton::getInstance('ModeratorLog_PostDAO');
		}
		
		/**
		 * @return ProtoModeratorLog_Post
		**/
		public static function proto()
		{
			return Singleton::getInstance('ProtoModeratorLog_Post');
		}

        /**
         * @param Post $post
         * @return $this
         */
        public function setPost(Post $post)
        {
            return $this
                ->setPostId($post->getId())
                ->setThreadId($post->getThreadId())
                ->setThreadTitle($post->getThread()->getTitle());
		}

        /**
         * @return Post|null
         */
        public function getPost()
        {
            if (!$this->postFetched && $this->postId) {
                try {
                    $this->post = Post::dao()->getById($this->postId);
                } catch (ObjectNotFoundException $e) {
                    $this->post = null;
                }
                $this->postFetched = true;
            }

            return $this->post;
		}

        public function exportInfo()
        {
            return [
                'threadId'      => $this->getThreadId(),
                'threadTitle'   => $this->getThreadTitle(),
                'postId'        => $this->getPostId(),
                'post'          => $this->getPost() ? $this->getPost()->export() : null,
            ];
        }
	}
?>