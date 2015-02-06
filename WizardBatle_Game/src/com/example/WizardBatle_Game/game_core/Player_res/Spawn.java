package com.example.WizardBatle_Game.game_core.Player_res;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Spawn {
    private static String[] def_type={"warrior", "engineer","medic"};
    private String type;//warrior, engineer,medic;
    private int level;
    private int count;
    private double make_coord;

    Spawn(int arg) {
        type = def_type[arg];
        level = 0;
        count = 1;
        make_coord = 0;
    }

    public String getType() {
        return type;
    }
    public int getLevel() {
        return level;
    }
    public int getCount() {
        return count;
    }

    public void setType(int t){
        type = def_type[t];
    }
    public void setLevel(int l){
        level = l;
    }
    public void lev_up(){
        level++;
    }
    public void setCount(int c){
        count = c;
    }
    public  void cou_uo(){
        count++;
    }

}
