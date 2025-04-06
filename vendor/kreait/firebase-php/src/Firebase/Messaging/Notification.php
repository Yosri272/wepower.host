<?php

declare(strict_types=1);

namespace Kreait\Firebase\Messaging;

use JsonSerializable;
<<<<<<< HEAD
use Kreait\Firebase\Exception\InvalidArgumentException;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

use function array_filter;

/**
 * @phpstan-type NotificationShape array{
 *     title?: string,
 *     body?: string,
 *     imageUrl?: string
 * }
 */
final class Notification implements JsonSerializable
{
<<<<<<< HEAD
    /**
     * @throws InvalidArgumentException if both title and body are null
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function __construct(
        private ?string $title = null,
        private ?string $body = null,
        private ?string $imageUrl = null,
    ) {
    }

<<<<<<< HEAD
    /**
     * @throws InvalidArgumentException if both title and body are null
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public static function create(?string $title = null, ?string $body = null, ?string $imageUrl = null): self
    {
        return new self($title, $body, $imageUrl);
    }

    /**
     * @param array{
     *     title?: string,
     *     body?: string,
     *     image?: string
     * } $data
<<<<<<< HEAD
     *
     * @throws InvalidArgumentException if both title and body are null
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['title'] ?? null,
            $data['body'] ?? null,
            $data['image'] ?? null,
        );
    }

    public function withTitle(string $title): self
    {
        $notification = clone $this;
        $notification->title = $title;

        return $notification;
    }

    public function withBody(string $body): self
    {
        $notification = clone $this;
        $notification->body = $body;

        return $notification;
    }

    public function withImageUrl(string $imageUrl): self
    {
        $notification = clone $this;
        $notification->imageUrl = $imageUrl;

        return $notification;
    }

    public function title(): ?string
    {
        return $this->title;
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function imageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function jsonSerialize(): array
    {
        return array_filter([
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->imageUrl,
<<<<<<< HEAD
        ], static fn($value) => $value !== null);
=======
        ], static fn($value): bool => $value !== null);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
