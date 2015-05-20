#include<stdio.h>

int main()
{
	int n=0, i;
	
	while(n<10)
	{
		n++;
		for(i=0; i<n; i++)printf(" ");
		printf("Aprendendo a colaborar!\n");
	}
	
	while(n>0)
	{
		n--;
		for(i=0; i<n; i++)printf(" ");
		printf("Aprendendo a colaborar!\n");
	}
	return 0;
}
