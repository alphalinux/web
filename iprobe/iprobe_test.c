void time_sink(void)
{
  int i;
  i=1000;
  while(i--);

}

void mini_function(void)
{
  int i;
  float temp=10000.0;
  i=1;
  while(i--)
    {
      temp = temp/2;
    }

}

main()
{
  int i=1000000;
  while (i--)
    {
      time_sink();
      mini_function();
      
    }
}

