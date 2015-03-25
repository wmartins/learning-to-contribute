/*
 * sum2.c - A simple programm to add two real numbers
 * 
 *  
 * Compile: gcc sum2.c -o sum2
 * 
 * Sintax: ./sum2 <value1> <value2>
 * 
*/
#include<stdio.h>
#include<stdlib.h>

double _add_(double value1, double value2){
	return value1+value2;
}

int main(int argc, char** argv){
	double value1,value2;
	value1 = atof(argc[1]);
	value2 = atof(argc[2]);
	printf("The sum is %f", _add_(value1,value2));
	return 0;
}
