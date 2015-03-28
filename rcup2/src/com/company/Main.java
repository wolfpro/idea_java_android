package com.company;

import java.math.BigInteger;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int t = sc.nextInt();
        for (int i = 0; i < t; ++i) {
            BigInteger x = new BigInteger(sc.next());
            BigInteger y = new BigInteger(sc.next());
            BigInteger z = new BigInteger(sc.next());

            if (z.toString().equals(x.multiply(y).toString())) {
                System.out.printf("Infinity\n");
            } else {
                System.out.printf("Finite\n");
            }
        }

    }
}
