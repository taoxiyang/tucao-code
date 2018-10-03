package main

import (
	"fmt"
)

func main() {
	s1 := []int{0, 1, 2, 3, 4, 5, 6, 7, 8}
	s2 := s1[3:5]
	s2 = append(s2, 42)
	fmt.Println(s1)     // [0 1 2 3 4 42 6 7 8]
}
