#include <iostream>
#include <conio.h>
#include <stdlib.h>
#include <time.h>

using namespace std;

int main(){
int nilai[30],x;
srand (time(0));
cout << "randomize : " <<endl<<endl;

 for (int i=0; i<30; i++){
  nilai[i]=rand() %30+1;
  x=0;
  for (int j=2; j<=nilai [i]; j++){
       if (nilai[i]%j==0){
   x++;
    }
  }
 if (x==1 && nilai [i]!=0){
  cout <<nilai[i]<<" ";
  }
 }
getch();
}
