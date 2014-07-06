import java.util.Scanner;

public class Main {

    static int s[];//0+, 1-;
    static long sum;
    static long m[];
    static int n;

    static void dfs(int i, long su) {
        if (i == n) {
            if (su == sum) {
                System.out.print(m[0]);
                for (int j = 1; j < n; ++j) {
                    if (s[j] == 0)
                        System.out.print("+");
                    else
                        System.out.print("-");
                    System.out.print(m[j]);
                }
                System.out.println("=" + su);
                System.exit(0);
            }
            return;
        }
        s[i] = 0;
        dfs(i + 1, su + m[i]);
        s[i] = 1;
        dfs(i + 1, su - m[i]);
    }

    public static void main(String[] args) {

        s = new int[25];
        m = new long[25];
        Scanner sc = new Scanner(System.in);
        n = sc.nextInt();
        sum = sc.nextInt();
        for (int i = 0; i < n; i++)
            m[i] = sc.nextInt();

        dfs(1, m[0]);
        System.out.println("No solution");


    }
}
