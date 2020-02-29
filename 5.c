int main () {
	
 int b, a, n, i;
 printf ("Triangle = ");
 scanf ("%d",&b);
 
 for (a = 1; a <= b; a++) {
 	
  i = b - a;
  for (n = 1; n <= i; n++)
  printf (" ");
  	for (n = 1; n <= a; n++)
  	printf ("*");
  	printf ("\n");
 }
return 0;
}

