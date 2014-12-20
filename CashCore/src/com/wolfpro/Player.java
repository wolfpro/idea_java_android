package com.wolfpro;

/**
 * Created by wolfpro on 10/6/14.
 */

public class Player {

    private String name;
    private String work;

    private boolean workStatus;

    private double cash; //money
    private double profit;//+money in step
    private double expense;//-money in step

    private String[] activS; //last element is number!!!
    private String[] passiveS; //last element is number!!!



    public double getCash() {
        return cash;
    }

    public double getProfit() {
        return profit;
    }

    public double getExpense() {
        return expense;
    }

    public String[] getActivS() {
        return activS;
    }

    public String[] getPassiveS() {
        return passiveS;
    }

    public double getCashFlow() {
        return (profit - expense);
    }

    public boolean getWorkStatus() {
        return workStatus;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setWork(String work) {
        this.work = work;
    }

    public void setWorkStatus(boolean workStatus) {
        this.workStatus = workStatus;
    }

    public void setCash(double cash) {
        this.cash = cash;
    }

    public void setProfit(double profit) {
        this.profit = profit;
    }

    public void setExpense(double expense) {
        this.expense = expense;
    }

    public void setActivS(String[] activS) {
        this.activS = activS;
    }

    public void setPassiveS(String[] passiveS) {
        this.passiveS = passiveS;
    }

    Player(String name, String work, boolean workStatus, double cash, double profit, double expense, String[] activS, String[] passiveS) {
        this.name = name;
        this.work = work;
        this.workStatus = workStatus;
        this.cash = cash;
        this.profit = profit;
        this.expense = expense;
        this.activS = activS;
        this.passiveS = passiveS;
    }

    public void reSumActives() {
        double ans = 0, temp;
        String[] st;

        for (int i = 0; i < activS.length; ++i) {
           st = activS[i].split(" ");
           temp = Double.valueOf(st[st.length-1]);
           ans+=temp;
        }
        profit = ans;
    }

    public  void reSumPassives(){
        double ans = 0, temp;
        String[] st;
        for (int i = 0; i < passiveS.length; ++i) {
            st = passiveS[i].split(" ");
            temp = Double.valueOf(st[st.length-1]);
            ans+=temp;
        }
        profit = ans;
    }

    public void nextStep() {
        reSumActives();
        reSumPassives();
        cash = cash + profit - expense;
    }
}
