<?php

declare(strict_types=1);

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserDeleted implements ShouldBroadcast
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	/**
	 * Information about the user deleted.
	 *
	 * @var $phone
	 */
	public string $phone;

	/**
	 * Create a new event instance.
	 *
	 * @param string $phone
	 *
	 * @return void
	 */
	public function __construct(string $phone)
	{
		$this->phone = $phone;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return \Illuminate\Broadcasting\Channel|array
	 */
	public function broadcastOn(): array
	{
		return [
			'user-deleted',
		];
	}

	/**
	 * The event's broadcast name.
	 *
	 * @return string
	 */
	public function broadcastAs(): string
	{
		return 'user.deleted';
	}
}
