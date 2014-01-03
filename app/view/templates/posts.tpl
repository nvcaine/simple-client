{foreach from=$posts item=post}
	<strong>{$post->post_title}</strong> (published: {$post->post_modified})<br />
{/foreach}