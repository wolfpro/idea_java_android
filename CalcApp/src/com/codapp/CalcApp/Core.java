package com.codapp.CalcApp2_3_3;

import java.math.BigDecimal;
import java.util.Stack;

public class Core implements Rel {
    private int len;//Ширина экрана в символах;
    private String ans;
    private String input;

    @Override
    public void setWidth(int len) {
        this.len = len;
    }

    @Override
    public String getAns(String in) {
        input = in;
        ans = Calc();
        return ans;
    }

    private void devideTooken() {
        StringBuilder sb = new StringBuilder(input);
        {
            if (input.charAt(0) == '-')
                input = "0" + input;

            char cc = input.charAt(input.length() - 1);
            if (!(cc <= '9' && cc >= '0') && cc != ')' && cc != '(') {
                sb.setLength(sb.length() - 1);
                input = sb.toString();
            }
            //sb.delete(0, sb.length());
            sb = new StringBuilder();


            char c;
            for (int i = 0; i < input.length(); i++) {
                c = input.charAt(i);
                if ((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z')) {
                    if (input.charAt(i + 1) == '(') {
                        sb.append(c);
                        sb.append(" ");
                        continue;
                    } else
                        sb.append(c);
                    continue;
                }

                if (c == '(') {
                    sb.append(c);
                    sb.append(" ");
                } else if (c == '=' || c == '+' || c == '-' || c == '*' || c == '/' || c == '^' || c == ')') {
                    sb.append(" ");
                    sb.append(c);
                    sb.append(" ");
                } else
                    sb.append(c);
            }
            //sb.append(input.charAt(input.length() - 1));
        }
        {
            char c = sb.charAt(0);
            for (int i = 1; i < sb.length(); i++) {
                if (c == ' ' && c == sb.charAt(i)) {
                    //System.out.println("debag");
                    StringBuilder sb2 = new StringBuilder();
                    for (int j = 0; j < i; j++)
                        sb2.append(sb.charAt(j));
                    for (int j = i + 1; j < sb.length(); j++)
                        sb2.append(sb.charAt(j));
                    sb = sb2;

                }
                c = sb.charAt(i);
            }
        }


        ans = sb.toString();
    }

    public int p(String s) {//prioryti que;
        if (s.charAt(0) <= '9' && s.charAt(0) >= '0')
            return -1;
        if (s.equals("+") || s.equals("-"))
            return 0;
        if (s.equals("*") || s.equals("/") || s.equals("x") || s.equals("X"))
            return 1;
        if (s.equals("^"))
            return 2;
        return -2;

        //function list;

    }

    private void makePolRecord() {
        Stack<String> stack = new Stack<String>();
        String[] took = ans.split(" ");

        // String c;
        StringBuilder sout = new StringBuilder();
        for (String c : took) {
            //c = took[i];
            if (p(c) == -1) {
                if (sout.length() == 0)
                    sout.append(c);
                else {
                    sout.append(" ");
                    sout.append(c);
                }
                continue;
            }
            if (((p(c) == -2) || c.equals("(")) && !(c.equals(")"))) {
                stack.push(c);
                continue;
            }
            if (c.equals(")")) {
                while (!(stack.isEmpty()) && !(stack.peek().equals("("))) {
                    if (stack.isEmpty()) {
                        System.out.println("Не хватает скобки");
                    } else {
                        if (sout.length() == 0) {
                            sout.append(stack.pop());
                        } else {
                            sout.append(" ");
                            sout.append(stack.pop());
                        }
                    }
                }
                if (!(stack.isEmpty()) && stack.peek().equals("("))
                    stack.pop();
                //if(stack.pop)==function append sout;


                if (!(stack.isEmpty()) && p(stack.peek()) == -2) {
                    if (sout.length() == 0) {
                        sout.append(stack.pop());
                    } else {
                        sout.append(" ");
                        sout.append(stack.pop());
                    }
                }
                continue;
            }
            if (p(c) > -1) {
                if (c.equals("^") || c.equals("="))
                    while (!(stack.isEmpty()) && p(c) < p(stack.peek())) {
                        if (sout.length() == 0)
                            sout.append(stack.pop());
                        else {
                            sout.append(" ");
                            sout.append(stack.pop());
                        }
                    }
                else
                    while (!(stack.isEmpty()) && p(c) <= p(stack.peek()))
                        if (sout.length() == 0)
                            sout.append(stack.pop());
                        else {
                            sout.append(" ");
                            sout.append(stack.pop());
                        }
                stack.push(c);
            }
        }
        while (!(stack.isEmpty())) {
            if (p(stack.peek()) == -1) {
                System.out.println("В выражении не согласованы скобки.");
            }
            if (sout.length() == 0)
                sout.append(stack.pop());
            else {
                sout.append(" ");
                sout.append(stack.pop());
            }
        }
        ans = sout.toString();

    }

    private String calc(String b, String a, String op) {
        if (a.equals("Infinity") || b.equals("Infinity"))
            return "Infinity";

        BigDecimal ba = new BigDecimal(a);
        BigDecimal bb = new BigDecimal(b);

        if (op.equals("+"))
            ba = ba.add(bb);
        if (op.equals("-"))
            ba = ba.subtract(bb);
        if (op.equals("/"))
            ba = ba.divide(bb, len - ba.divideToIntegralValue(bb).toString().length(), 1);
        if (op.equals("x") || op.equals("X") || op.equals("*")) {
            ba = ba.multiply(bb);
        }
        if (op.equals("^")) {

            try {
                ba = new BigDecimal(Math.pow(ba.doubleValue(), bb.doubleValue()));
            } catch (Exception e) {
                //System.out.println("Infinity");
                return "Infinity";
            }

        }

        return ba.toString();
    }

    private String calc(String a, String fu) {
        return " ";
    }

    private void CalcMachine() {
        Stack<String> stack = new Stack<String>();
        String[] token = ans.split(" ");
        for (String t : token) {
            if (p(t) == -1) {
                stack.push(t);
                continue;
            } else {
                if (p(t) != -2) {
                    stack.push(calc(stack.pop(), stack.pop(), t));
                } else
                    stack.push(calc(stack.pop(), t));
            }

        }
        //if (!stack.isEmpty())
        ans = stack.pop();
    }

    private void DelLastZero() {
        for (int i = 0; i < ans.length(); i++) {
            if (ans.charAt(i) == '.') {
                StringBuilder sb = new StringBuilder(ans);
                for (int j = ans.length() - 1; j > -1; j--)
                    if (ans.charAt(j) == '0')
                        sb.setLength(sb.length() - 1);
                    else {
                        if (sb.charAt(sb.length() - 1) == '.')
                            sb.setLength(sb.length() - 1);
                        ans = sb.toString();

                        return;
                    }
                return;
            }
        }
    }

    private String Calc() {
        devideTooken();

        makePolRecord();

        CalcMachine();

        DelLastZero();
        return ans;
    }

    Core() {
        len = 10;
        ans = "0";
    }
}
