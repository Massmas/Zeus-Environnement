package Controller;

import java.util.ArrayList;

import Modele.modele;

public class controleur {

	
	
	public static ArrayList<agent> selectAllAgents()
	{
		return modele.selectAllAgents();
	}
	
	public static ArrayList<agent> selectAgent(String login)
	{
		return modele.selectAgent(login);
	}
	
	public static ArrayList<Integer> verifConnexion(String login, String mdp)
	{
		return modele.verifConnexion(login, mdp);
	}
	
	public static ArrayList<String> champs(String login)
	{
		return modele.champs(login);
	}
}
