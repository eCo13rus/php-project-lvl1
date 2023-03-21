install:
		composer install
brain-games:
		composer exec brain-games
validate:
		composer validate
lint:
		composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
		composer exec brain-even
