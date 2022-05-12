import java.util.Scanner;
public class add {
 public static void main(String[] args) {
  int n1;
  int n2;
  int n3;
  Scanner scanner = new Scanner(System.in);
  System.out.println("Enter 1st number  : ");
  n1 = scanner.nextInt();
  System.out.println("Enter 2nd number  : ");
  n2 = scanner.nextInt();
  System.out.println("Enter 3rd number  : ");
  n3 = scanner.nextInt();
  int ans = n1 + n2 + n3;
  System.out.println("sum of given three numbers = " +ans);
 }
}