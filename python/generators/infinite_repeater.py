from typing import Any, Generator


def infinite_repeater(sequence: list[Any]) -> Generator[Any, None, None]:
    while True:
        for item in sequence:
            yield item


def main() -> None:
    repeater: Generator[Any, None, None] = infinite_repeater([1, 2, 3, 4])

    for _ in range(10):
        print(next(repeater))


if __name__ == "__main__":
    main()