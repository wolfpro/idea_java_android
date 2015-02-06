package com.example.WizardBatle_Game.game_core;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Monster {
    private static String[] def_type = {"warrior", "engineer", "medic"};

    private int id;//name owner;
    private String type;
    private int level;
    private int hp;
    private int mp;//skill;
    private double speed;
    private double position;
    private int height, width;
    private boolean live;
    //image image;

    Monster(int id, String type, int level, int hp, int mp, double speed, double position, int height, int width) {
        live = true;
        this.id = id;
        this.type = type;
        this.level = level;
        this.hp = hp;
        this.mp = mp;
        this.speed = speed;
        this.position = position;
        this.height = height;
        this.width = width;
    }

    public void attack() {
        if (type.equals(def_type[0])) {

        } else if (type.equals(def_type[1])) {

        } else if (type.equals(def_type[2])) {

        }
    }

    //set
    public void setId(int id){
        this.id = id;
    }

    public void setType(String type) {
        this.type = type;
    }

    public void setLevel(int level) {
        this.level = level;
    }

    public void setHp(int hp) {
        this.hp = hp;
    }

    public void setMp(int mp) {
        this.mp = mp;
    }

    public void setSpeed(double speed) {
        this.speed = speed;
    }

    public void setPosition(double position) {
        this.position = position;
    }

    public void setHeight(int height) {
        this.height = height;
    }

    public void setWidth(int width) {
        this.width = width;
    }

    public void setLive(boolean live) {
        this.live = live;
    }

    //get
    public int getId(){
        return id;
    }

    public String getType() {
        return type;
    }

    public int getLevel() {
        return level;
    }

    public int getHp() {
        return hp;
    }

    public int getMp() {
        return mp;
    }

    public double getPosition() {
        return position;
    }

    public double getSpeed() {
        return speed;
    }

    public int getHeight() {
        return height;
    }

    public int getWidth() {
        return width;
    }

    public boolean is_live() {
        return live;
    }


}
