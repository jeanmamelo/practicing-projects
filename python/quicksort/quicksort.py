def quicksort(array):
    """Sorts an array using the quicksort algorithm.

    Args:
        array (list): The list of elements to be sorted.

    Returns:
        list: A new sorted list.
    """
    if len(array) < 2:
        return array
    else:
        pivo = array[0]
        menores = [i for i in array[1:] if i <= pivo]
        maiores = [i for i in array[1:] if i > pivo]
        return quicksort(menores) + [pivo] + quicksort(maiores)

# Example usage:
if __name__ == "__main__":
    sample_array = [10, 5, 2, 3, 7, 6, 1, 4, 9, 8]
    sorted_array = quicksort(sample_array)
    print("Unsorted array:", sample_array)
    print("Sorted array:", sorted_array)
