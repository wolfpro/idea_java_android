package com.example.WizardBatle_Game.game_core.Player_res;

import java.util.ArrayList;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Tower {
    private ArrayList<Spawn> spawns;

    Tower() {
        spawns.add(new Spawn(0));//default 0 - war;
    }

    void build(int type){
        spawns.add(new Spawn(type));
    }
    void destroy(int i){
        spawns.remove(i);
    }
    void upgrade(int i){
        spawns.get(i).lev_up();
    }
}
