<?php declare(strict_types = 1);

namespace WebChemistry\Images\Resources\Transfer;

use Nette\Utils\Image;
use WebChemistry\Images\Image\IImageFactory;

class LocalResource extends TransferResource {

	/** @var string */
	private $file;

	public function __construct(string $file, ?string $id) {
		$this->file = $file;
		$this->setId($id);
	}

	/**
	 * @return Image
	 */
	public function toImage(IImageFactory $factory = null) {
		if ($factory) {
			return $factory->createFromFile($this->file);
		}

		return Image::fromFile($this->file);
	}

	/**
	 * @return string
	 */
	public function getLocation() {
		return $this->file;
	}

}
