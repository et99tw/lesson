package main

import (
	"fmt"
)

func main() {
	var lesson1 int = 50
	var lesson2 int = 80
	var lesson3 int = 78
	var avg int = (lesson1 + lesson2 + lesson3)/3
	var (	x, y int
		a, s = 100,"abc")
	fmt.Println( "TOTAL:",avg,x,y,a,s)
}
