package main

import "fmt"

type node struct {
	data int
	next *node
}

type linkedList struct {
	head   *node
	length int
}

func (l *linkedList) prepend(n *node) {
	second := l.head
	l.head = n
	l.head.next = second
	l.length++
}

func (l linkedList) printListData() {
	toPrint := l.head
	for l.length != 0 {
		fmt.Printf("%d ", toPrint.data)
		toPrint = toPrint.next
		l.length--
	}
	fmt.Print("\n")
}

func (l *linkedList) deleteWithValue(value int) error {
	if l.length == 0 {
		return fmt.Errorf("could not delete the value %d: the list is empty", value)
	}

	if l.head.data == value {
		l.head = l.head.next
		l.length--
		return nil
	}

	previousToDelete := l.head
	for previousToDelete.next.data != value {
		if previousToDelete.next.next == nil {
			return fmt.Errorf("the given value %d was not found inside the list", value)
		}
		previousToDelete = previousToDelete.next
	}
	previousToDelete.next = previousToDelete.next.next
	l.length--

	return nil
}

func main() {
	newLinkedList := linkedList{}

	node1 := &node{data: 42}
	node2 := &node{data: 18}
	node3 := &node{data: 16}
	node4 := &node{data: 11}
	node5 := &node{data: 7}
	node6 := &node{data: 2}

	newLinkedList.prepend(node1)
	newLinkedList.prepend(node2)
	newLinkedList.prepend(node3)
	newLinkedList.prepend(node4)
	newLinkedList.prepend(node5)
	newLinkedList.prepend(node6)

	newLinkedList.printListData()

	err := newLinkedList.deleteWithValue(16)
	if err != nil {
		fmt.Println("ERROR:", err)
	}

	err = newLinkedList.deleteWithValue(18)
	if err != nil {
		fmt.Println("ERROR:", err)
	}

	err = newLinkedList.deleteWithValue(100)
	if err != nil {
		fmt.Println("ERROR:", err)
	}

	err = newLinkedList.deleteWithValue(2)
	if err != nil {
		fmt.Println("ERROR:", err)
	}

	newLinkedList.printListData()

	emptyList := linkedList{}

	err = emptyList.deleteWithValue(10)
	if err != nil {
		fmt.Println("ERROR:", err)
	}

	emptyList.printListData()
}
