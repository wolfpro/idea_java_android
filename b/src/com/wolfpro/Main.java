package com.wolfpro;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        // write your code here
        /*Hore llwdlo!
        4*/
        Scanner sc = new Scanner(System.in);
        String s = sc.nextLine();

        int n = sc.nextInt();
        int m = s.length() / n;
        char[][] f = new char[m][n];

        for (int j = 0; j < n; ++j)
            for (int i = 0; i < m; ++i)
                f[i][j] = s.charAt(i + j * m);

        for (int i = 0; i < m; ++i) {
            for (int j = 0; j < n; ++j) {
                f[i][j] = s.charAt(i + j * m);
                System.out.print(f[i][j]);
            }
        }

        System.out.println("");
    }
}
