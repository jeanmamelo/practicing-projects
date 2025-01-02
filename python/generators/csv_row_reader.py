import csv
import sys
from typing import Generator


def csv_row_reader(file_path: str) -> Generator[list[str], None, None]:
    with open(file_path, 'r') as csv_file:
        reader = csv.reader(csv_file)
        for row in reader:
            yield row


def main() -> None:
    reader: Generator[list[str], None, None] = csv_row_reader('python/generators/data.csv')

    while True:
        try:
            for i in range(3):
                print(next(reader))
            input('continue retrieving rows?')
        except StopIteration:
            print('no more rows...')
            sys.exit()


if __name__ == "__main__":
    main()