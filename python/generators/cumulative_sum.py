from typing import Generator


def cumulative_sum() -> Generator[float, float, None]:
    total = 0.0
    while True:
        total += yield total



def main() -> None:
    cumulative_generator: Generator[float, float, None] = cumulative_sum()
    next(cumulative_generator)

    while True:
        value: float = float(input('Enter a value: '))
        current_sum: float = cumulative_generator.send(value)
        print(f'Cumulative sum: {current_sum}')


if __name__ == "__main__":
    main()