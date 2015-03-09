package com.company;

import java.util.Date;

public class Main {

    static int FPS = 25;
    static boolean RUN = true;

    public static void foo() {
        System.out.println("ok");
    }

    public static class MyThread extends Thread {
        Date d;
        long upd;
        long last_tik;

        public MyThread() {
            d = new Date();
            upd = 1000 / FPS;
            last_tik = d.getTime();
        }

        @Override
        public void run() {
            last_tik = d.getTime();
            while (RUN) {
                if(d.getTime()-last_tik<upd)
                    try {
                        sleep(upd);
                    }catch (Exception e){

                    }
                last_tik = d.getTime();
                foo();
            }

        }
    }

    public static void main(String[] args) {
        MyThread t = new MyThread();
        t.start();
    }
}
