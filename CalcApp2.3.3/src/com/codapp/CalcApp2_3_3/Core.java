package com.codapp.CalcApp2_3_3;

import java.math.BigDecimal;
import java.util.Stack;

public class Core implements Rel {
    private int len;//Ширина экрана в символах;
    private String ans;
    private String input;
    private String err;

    @Override
    public void setWidth(int len) {
        this.len = len;
    }

    @Override
    public String getAns(String in) {
        err = "";
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
        if (s.length() > 0) {
            if (s.charAt(0) <= '9' && s.charAt(0) >= '0')
                return -1;
            if (s.equals("+") || s.equals("-"))
                return 0;
            if (s.equals("*") || s.equals("/") || s.equals("x") || s.equals("X"))
                return 1;
            if (s.equals("^"))
                return 2;
        }
        return -2;
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
                    {
                        if (sout.length() == 0) {
                            sout.append(stack.pop());
                        } else {
                            sout.append(" ");
                            sout.append(stack.pop());
                        }
                    }
                }
                if (stack.isEmpty()) {
                    err = "Не хватает скобки";
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
                err = ("В выражении не согласованы скобки.");
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
        if (a.equals("Infinity or error") || b.equals("Infinity or error"))
            return "Infinity or error";

        BigDecimal ba = new BigDecimal(a);
        BigDecimal bb = new BigDecimal(b);

        if (op.equals("+"))
            ba = ba.add(bb);
        if (op.equals("-"))
            ba = ba.subtract(bb);
        if (op.equals("/"))
            ba = ba.divide(bb, len, 1);
        if (op.equals("x") || op.equals("X") || op.equals("*")) {
            ba = ba.multiply(bb);
        }
        if (op.equals("^")) {

            try {
                ba.setScale(20);
                ba = new BigDecimal(Math.pow(ba.doubleValue(), bb.doubleValue()));
                StringBuilder sb = new StringBuilder(ba.toString());
                boolean dot = false;
                int ds = 0;
                for (int i = 0; i < sb.length() && !dot; i++) {
                    if (sb.charAt(i) == '.') {
                        dot = true;
                        for (int j = 0; j <= len + 1; j++) {
                            if (j > len)
                                ds++;
                        }
                        sb.setLength(sb.length() - ds);
                        ba = new BigDecimal(sb.toString());
                        break;
                    }
                }
                ba = ba.setScale(10, 1);
            } catch (Exception e) {
                return "Infinity or error";
            }

        }


        return ba.toString();
    }

    private String calc(String a, String fu) {
        if (a.equals("Infinity or error"))
            return "Infinity or error";

        BigDecimal ba = new BigDecimal(a);
        if (fu.equals("sqr"))
            ba = new BigDecimal(Math.sqrt(ba.doubleValue()));
        if (fu.equals("sinR"))
            ba = new BigDecimal(Math.sin(ba.doubleValue()));
        if (fu.equals("sin")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.sin(ba.doubleValue()));
        }
        if (fu.equals("asin")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.asin(ba.doubleValue()));
        }
        if (fu.equals("asinR")) {
            ba = new BigDecimal(Math.asin(ba.doubleValue()));
        }
        if (fu.equals("cos")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.cos(ba.doubleValue()));
        }
        if (fu.equals("cosR")) {
            ba = new BigDecimal(Math.cos(ba.doubleValue()));
        }
        if (fu.equals("acos")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.acos(ba.doubleValue()));
        }
        if (fu.equals("acosR")) {
            ba = new BigDecimal(Math.acos(ba.doubleValue()));
        }
        if (fu.equals("tan")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.tan(ba.doubleValue()));
        }
        if (fu.equals("tanR")) {
            ba = new BigDecimal(Math.tan(ba.doubleValue()));
        }
        if (fu.equals("atan")) {
            ba = ba.multiply(new BigDecimal("0.01745329251"));
            ba = new BigDecimal(Math.atan(ba.doubleValue()));
        }
        if (fu.equals("atanR")) {
            ba = new BigDecimal(Math.atan(ba.doubleValue()));
        }

        if (fu.equals("ln")) {
            ba = new BigDecimal(Math.log(ba.doubleValue()));
        }

        if (fu.equals("lg")) {
            ba = new BigDecimal(Math.log10(ba.doubleValue()));
        }

        return ba.toString();
    }

    private void CalcMachine() {
        Stack<String> stack = new Stack<String>();
        String[] token = ans.split(" ");
        for (String t : token) {
            if (p(t) == -1) {
                stack.push(t);
                continue;
            } else {
                if (!stack.isEmpty()) {
                    if (p(t) != -2) {
                        stack.push(calc(stack.pop(), stack.pop(), t));
                    }
                    if (p(t) == -2)
                        stack.push(calc(stack.pop(), t));
                } else {
                    err = "Не хватает скобки.";
                    return;
                }
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

        if (err.length() == 0)
            CalcMachine();
        if (err.length() == 0)
            DelLastZero();
        if (err.length() == 0)
            return ans;

        return err;

    }

    Core() {
        len = 10;
        ans = "0";
    }
}
