/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Form;

import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.views.PieChart;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;
import Services.UserService;
import com.codename1.ui.Toolbar;
import java.util.List;

/**
 *
 * @author yousra
 */
class Statistique extends BaseForm {

    public Statistique() {
        super("Statistiques", new BorderLayout());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        tb.addMaterialCommandToLeftBar("",
                FontImage.MATERIAL_ARROW_BACK, ev -> {
                    new enseignentMenu(this).show();
                });
        this.getStyle().setBgColor(0x99CCCC);
        this.getStyle().setBgTransparency(255);
        createPieChartForm(this);
    }

    private DefaultRenderer buildCategoryRenderer(int[] colors) {
        DefaultRenderer renderer = new DefaultRenderer();
        renderer.setLabelsTextSize(30);
        renderer.setLegendTextSize(30);
        renderer.setMargins(new int[]{20, 30, 15, 0});
        for (int color : colors) {
            SimpleSeriesRenderer r = new SimpleSeriesRenderer();
            r.setColor(color);
            renderer.addSeriesRenderer(r);
        }
        return renderer;
    }

    protected CategorySeries buildCategoryDataset(String title, double[] values) {
        CategorySeries series = new CategorySeries(title);
        int k = 0;
//        for (double value : values) {
        series.add("Activer", values[1]);
        series.add("Désactiver", values[0]);
        
//        }

        return series;
    }

    public void createPieChartForm(Form f) {

        UserService sp = new UserService();

        List<Integer> li = sp.StatistiqueP();

        int activer = 0;
        int desactiver = 0;

        // Generate the values
        double[] values = new double[li.size()];
        for (int i = 0; i < li.size(); i++) {
            if (li.get(i).intValue() == 1) {
                activer++;
            } else {
                desactiver++;
            }
        }
        values[0] = desactiver;
        values[1] = activer;

        int[] colors = new int[]{0x4D4DFF  ,0xf4b342};
        DefaultRenderer renderer = buildCategoryRenderer(colors);
        renderer.setZoomButtonsVisible(true);
        renderer.setZoomEnabled(true);
        renderer.setChartTitleTextSize(80);
        renderer.setDisplayValues(true);
        renderer.setShowLabels(true);
        SimpleSeriesRenderer r = renderer.getSeriesRendererAt(0);
        r.setHighlighted(true);

        // Create the chart ... pass the values and renderer to the chart object.
        PieChart chart = new PieChart(buildCategoryDataset("Status de Compte", values), renderer);

        // Wrap the chart in a Component so we can add it to a form
        ChartComponent c = new ChartComponent(chart);

        // Create a form and show it.
        f.setLayout(new BorderLayout());
        f.addComponent(BorderLayout.CENTER, c);
        int totale = activer + desactiver;
        Label prc = new Label("Totale des compte : " + totale);

        f.addComponent(BorderLayout.SOUTH, prc);

    }

}
