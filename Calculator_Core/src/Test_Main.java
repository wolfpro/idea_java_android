public class Test_Main {
    public static void main(String[] args) {
        System.out.println("Ok");
        Core core = new Core();
        String in1 = "2-2+3-1+100-2.2";

        System.out.println(core.getAns(in1));
        System.out.println(core.getAns("100/(2-3)"));
        System.out.println(core.getAns("100/3"));
        System.out.println(core.getAns("1.1^10000.3+2"));
        /*System.out.print((int) '0' + " " +(int) '9');*/
    }
}
