<?php

namespace Database\Seeders;

use App\Models\ProductCategories;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProductCategories0=new ProductCategories();
        $ProductCategories0->name="Sin especificar";
        $ProductCategories0->description="No se tiene alguna clasificación especifica para el producto en cuestión.";
        $ProductCategories0->slug="sin-especificar";
        $ProductCategories0->save();

        $ProductCategories1=new ProductCategories();
        $ProductCategories1->name="Cereales";
        $ProductCategories1->description="Cultivos pertenecientes a la familia Poaceae o Gramíneas que normalmente se explotan en grandes extensiones y cuyos granos se caracterizan por su alto contenido en carbohidratos. Generalmente ese tipo de cultivo tiene un uso agroindustrial. Ejemplos: maíz, arroz o sorgo.";
        $ProductCategories1->slug="cereales";
        $ProductCategories1->save();

        $ProductCategories2=new ProductCategories();
        $ProductCategories2->name="Leguminosas";
        $ProductCategories2->description="Cultivos pertenecen a la familia Fabaceae o Leguminosae que normalmente se explotan en grandes extensiones y cuyos granos se caracterizan por su alto contenido en proteínas. Generalmente se usan para consumo directo (no sufren un procesamiento agroindustrial). Ejemplos: caraota, frijol, quinchoncho.";
        $ProductCategories2->slug="leguminosas";
        $ProductCategories2->save();

        $ProductCategories3=new ProductCategories();
        $ProductCategories3->name="Oleaginosas";
        $ProductCategories3->description="Cultivos mayoritariamente de ciclo corto, pertenecientes a varias familias taxonómicas que normalmente se explotan en grandes extensiones y de cuyos granos se extrae aceites. Este tipo tiene un uso exclusivamente agroindustrial. Ejemplos de ciclo corto: soja, girasol, ajonjolí; de ciclo largo: palma aceitera.";
        $ProductCategories3->slug="oleaginosas";
        $ProductCategories3->save();

        $ProductCategories4=new ProductCategories();
        $ProductCategories4->name="Hortalizas";
        $ProductCategories4->description="Este tipo de cultivo es mayoritariamente de ciclo corto, perteneciente a muchas familias taxonómicas, generalmente explotados en pequeñas superficies y que se comercializan para el consumo fresco de alguno de sus órganos (raíz, tallo, hoja, inflorescencia, fruto) que presentan un alto contenido de vitaminas, minerales y fibra. Ejemplos: tomate, pimentón, lechuga, zanahoria, brócoli.";
        $ProductCategories4->slug="hortalizas";
        $ProductCategories4->save();

        $ProductCategories5=new ProductCategories();
        $ProductCategories5->name="Frutales";
        $ProductCategories5->description="Cultivos mayoritariamente de ciclo largo, pertenecientes a muchas familias taxonómicas, generalmente explotados en grandes superficies y que se comercializan para el consumo fresco de sus frutos con alto contenido de vitaminas, minerales y fibra. Algunas especies de este tipo se utilizan para producción agroindustrial. Ejemplos: naranja, mango, aguacate, parchita, cambur, piña.";
        $ProductCategories5->slug="frutales";
        $ProductCategories5->save();

        $ProductCategories6=new ProductCategories();
        $ProductCategories6->name="Ornamentales";
        $ProductCategories6->description="Este tipo de cultivos se utilizan para la decoración y no son comercializados para la alimentación. Algunas son de ciclo corto y otras de ciclo largo. Mientras algunas se comercializan por sus flores, otras lo hacen por su follaje.";
        $ProductCategories6->slug="ornamentales";
        $ProductCategories6->save();

        $ProductCategories7=new ProductCategories();
        $ProductCategories7->name="Raíces y tubérculos";
        $ProductCategories7->description="Cultivos mayoritariamente de ciclo corto, algunos de agricultura intensiva y extensiva, que se comercializan para el consumo de sus raíces y tallos de alto contenido de carbohidratos. Ejemplos: papa, yuca, ocumo, ñame.";
        $ProductCategories7->slug="raices-y-tuberculos";
        $ProductCategories7->save();

        $ProductCategories8=new ProductCategories();
        $ProductCategories8->name="Cultivos para bebidas medicinales y aromáticas";
        $ProductCategories8->description="Especies cultivadas para obtener de ellas órganos vegetales que posteriormente se utilizan en infusiones, siendo la infusión un tipo de bebida obtenida a partir de la introducción de órganos vegetales en agua hirviendo. Es un grupo altamente variable en cuanto al ciclo de cultivo y al nivel de producción. Ejemplo: té, café, manzanilla, malojillo, menta, etc.";
        $ProductCategories8->slug="Cultivos-para-bebidas-medicinales-y-aromaticas";
        $ProductCategories8->save();

        $ProductCategories9=new ProductCategories();
        $ProductCategories9->name="Cultivos tropicales tradicionales";
        $ProductCategories9->description="Como el café, cacao, caña de azúcar y tabaco. Estos cuatro cultivos no tienen cosas en común, es más bien, una categoría de cultivos que no se pueden clasificar en las anteriores categorías. El café podría clasificarse en Frutales o cultivos para bebidas medicinales y aromáticas, mientras el cacao podría encontrarse en Frutales.";
        $ProductCategories9->slug="cultivos-tropicales-tradicionales";
        $ProductCategories9->save();

        $ProductCategories10=new ProductCategories();
        $ProductCategories10->name="Pastos";
        $ProductCategories10->description="Este tipo de cultivo es mayoritariamente de ciclo largo, utilizado para alimentar al ganado mediante el consumo de sus hojas. Se pueden ofrecer al animal directamente en el campo con la implementación de diferentes prácticas de manejo de pastos (potreros o pastizales) o pueden ser pastos de corte, es decir, se corta el follaje, se seca y se empaqueta (heno) o se somete a un proceso de fermentación (ensilaje). El heno y el ensilaje se usan para tener pasto para ofrecer al animal en épocas donde es difícil tener pasto en el potrero (en nuestro país en época de sequía, en otros países en invierno).";
        $ProductCategories10->slug="pastos";
        $ProductCategories10->save();

        


        // Sirve para que se generen aleatoriamente x cantidad de registros indicados.
        // ProductCategories::factory(10)->create();
    }
}
