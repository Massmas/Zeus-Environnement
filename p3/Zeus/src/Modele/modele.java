package Modele;

import java.sql.Statement;
import java.util.ArrayList;
import java.sql.ResultSet;
import java.sql.SQLException;

import Controller.agent;

public class modele {
	private static BDD uneBdd = new BDD("localhost", "zeus", "root", "root1");
	
	public static ArrayList<agent> selectAllAgents()
	{
		ArrayList<agent> lesAgents = new ArrayList<agent>();
		String requete = "select * from agent;";
		try {
			uneBdd.seConnecter();
			Statement unStat = uneBdd.getMaConnexion().createStatement();
			ResultSet desRes = unStat.executeQuery(requete);
			while(desRes.next())
			{
				agent unAgent = new agent(
						desRes.getString("nomA"), desRes.getString("prenomA") ,desRes.getString("login"), desRes.getString("mdp"),
						desRes.getString("adresse"), desRes.getString("codepostal"),desRes.getString("ville"),desRes.getString("dateDebContrat"),desRes.getString("dateFinContrat")
						);
				
				lesAgents.add(unAgent);
						
			}
			uneBdd.seDeconnecter();
		}catch(SQLException exp)
		{
			exp.printStackTrace();
		}
		return lesAgents;
		
	}
	
	
	public static ArrayList<agent> selectAgent(String login)
	{
		ArrayList<agent> lesAgents = new ArrayList<agent>();
		String requete = "select idA, nomA, prenomA, adresse, codepostal, ville, dateDebContrat, dateFinContrat from agent;";
		try {
			uneBdd.seConnecter();
			Statement unStat = uneBdd.getMaConnexion().createStatement();
			ResultSet desRes = unStat.executeQuery(requete);
			while(desRes.next())
			{
				agent unAgent = new agent(desRes.getInt("idA"),
						desRes.getString("nomA"), desRes.getString("prenomA"),
						desRes.getString("adresse"), desRes.getString("codepostal"),desRes.getString("ville"),desRes.getString("dateDebContrat"),desRes.getString("dateFinContrat")
						);
				
				lesAgents.add(unAgent);
						
			}
			uneBdd.seDeconnecter();
		}catch(SQLException exp)
		{
			exp.printStackTrace();
		}
		return lesAgents;
		
	}
	
	
	
	public static ArrayList<Integer> verifConnexion(String login, String mdp)
	{
		
		ArrayList<Integer> lesAgents = new ArrayList<Integer>();
		String requete = "select count(*) from agent where login = '" + login + 
	            "' and mdp = '" 
	            + mdp + "';";
		try {
			uneBdd.seConnecter();
			Statement unStat = uneBdd.getMaConnexion().createStatement();
			ResultSet desRes = unStat.executeQuery(requete);
			while(desRes.next())
			{
				int verif= desRes.getInt("count(*)");
				lesAgents.add(verif);
			}
			System.out.println(requete);
			uneBdd.seDeconnecter();
		}catch(SQLException exp)
		{
			exp.printStackTrace();
		}
		return lesAgents;
		
	}
	
	public static ArrayList<String> champs(String login) {
        ArrayList<String> monUser = new ArrayList<String>();
        String requete = "Select nomA, prenomA,login from agent where login = '"+ login +"';";
        try{
            uneBdd.seConnecter();
            Statement unStat = uneBdd.getMaConnexion().createStatement();
            ResultSet desRes = unStat.executeQuery(requete);
            while (desRes.next()) {
                String nomA = desRes.getString("nomA");
                String prenomA = desRes.getString("prenomA");
                String login2 = desRes.getString("login");
                
                monUser.add(nomA);
                monUser.add(prenomA);
                monUser.add(login2);
                
            }
            uneBdd.seDeconnecter();
        }catch(SQLException exp) {
            exp.printStackTrace();
        }
        return monUser;
    }
	
	
	
	
	
	
	
	
	
	/*public static agent selectWhereAgent(String login, String mdp) 
    {
		agent unAgent = null;
	    
	            
	    modele.uneBdd.seConnecter();
	
	    try
	    {
	        Statement unStat = modele.uneBdd.getMaConnexion().createStatement();
	        ResultSet unRes = unStat.executeQuery(requete);
	        if(unRes.next())
	        {
	            unAgent = new agent(
	                    unRes.getInt("idA"),
	                    unRes.getString("nomA"),
	                    unRes.getString("prenomA"),
	                    unRes.getString("login"),
	                    unRes.getString("mdp"),
	                    unRes.getString("adresse"),
	                    unRes.getString("codepostal"),
	                    unRes.getString("ville"),
	                    unRes.getString("dateDebContrat"),
	                    unRes.getString("dateFinContrat")
	                    );
	        }
	    }
	    catch(SQLException exp)
	    {
	        System.out.println("Erreur execution : " + requete);
	    }
	    modele.uneBdd.seDeconnecter();
	    return unAgent;
	    }
	*/
	
	
	public static void executer (String requete)
	{
		try {
			uneBdd.seConnecter();
			Statement unStat = uneBdd.getMaConnexion().createStatement();
			unStat.execute(requete);
			unStat.close();
		}catch(SQLException exp) {
			System.out.println("Erreur d'éxecution :" + exp);
		}
	}
	
}
